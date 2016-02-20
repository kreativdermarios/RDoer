class AcessosController < ApplicationController
  before_action :set_acesso, only: [:show, :edit, :update, :destroy]

  # GET /acessos
  # GET /acessos.json
  def index
    @acessos = Acesso.all
  end

  # GET /acessos/1
  # GET /acessos/1.json
  def show
  end

  # GET /acessos/new
  def new
    @acesso = Acesso.new
  end

  # GET /acessos/1/edit
  def edit
  end

  def getdatasites


   #id = Cliente.select("id").where(site: "gbbs")

    t = Acesso.create(id_acesso: params[:id_acesso], url: params[:url])

  end

  # POST /acessos
  # POST /acessos.json
  def create
    @acesso = Acesso.new(acesso_params)

    respond_to do |format|
      if @acesso.save
        format.html { redirect_to @acesso, notice: 'Acesso was successfully created.' }
        format.json { render :show, status: :created, location: @acesso }
      else
        format.html { render :new }
        format.json { render json: @acesso.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /acessos/1
  # PATCH/PUT /acessos/1.json
  def update
    respond_to do |format|
      if @acesso.update(acesso_params)
        format.html { redirect_to @acesso, notice: 'Acesso was successfully updated.' }
        format.json { render :show, status: :ok, location: @acesso }
      else
        format.html { render :edit }
        format.json { render json: @acesso.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /acessos/1
  # DELETE /acessos/1.json
  def destroy
    @acesso.destroy
    respond_to do |format|
      format.html { redirect_to acessos_url, notice: 'Acesso was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  private
    # Use callbacks to share common setup or constraints between actions.
    def set_acesso
      @acesso = Acesso.find(params[:id])
    end

    # Never trust parameters from the scary internet, only allow the white list through.
    def acesso_params
      params.require(:acesso).permit(:id_acesso, :url)
    end
end
